<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class RouteController extends Controller
{


    function __construct()
    {
        $this->middleware('auth');
    }

    public function LogOut(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function CheckProfile(Request $request, $list)
    {
        if ($list == "list") {
            $view = 'dashboard.userList';
        } else if ($list == "dashboard") {
            $view = 'dashboard';
        } else if ($list == "add") {
            $view = 'dashboard.addUser';
        } else if ($list == "profile") {
            $view = 'dashboard.profile.profile';
        } else {
            if ((int)$list) {
                return view('dashboard.addUser', [
                    'profile' => File::where('user_id', Auth::user()->id)
                        ->get(),
                    'id' => DB::table('users')->where('id', $list)->first(),
                    'data' => 1,
                    'reg' => 1
                ]);
            }
        }

        if (File::where('user_id', Auth::user()->id)->exists()) {
            return view($view, [
                'users' => User::all(), //users list created byadmin
                'profile' => File::where('user_id', Auth::user()->id) //finding profile
                    ->get(),

                'data' => 1,
                'reg' => 0
            ]);
        } else {
            return view($view, [
                'data' => 0
            ]);
        }
    }


    public function AddUser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'role' => 'required',
            'password' => 'required|max:255 ',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|numeric'
        ]);
        // ADD DATA
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role'  => $request->role,
            'phone' => $request->phone,

        ]);


        return redirect('/dashboard/list');
    }

    public function UpdateUser($id, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'role' => 'required',
            'password' => 'required|max:255 ',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|numeric'
        ]);
        //update Data
        $updat = User::find($id);
        $updat->name = $request->name;
        $updat->role = $request->role;
        $updat->password = Hash::make($request->password);
        $updat->email = $request->email;
        $updat->phone = $request->phone;
        $updat->save();

        return redirect('/dashboard/list');
    }

    public function delete(Request $request, $id)
    {
        return $id;
    }

    public function deleteAjax(Request $request)
    {
        if ($request->ajax()) {

            $id = $request->get('id');
            DB::table('users')->where('id', '=', $id)->delete();

            echo $id;
        }
    }

    function action(Request $request)
    {

        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = DB::table('users')
                    ->where('id', 'like', '%' . $query . '%')
                    ->orWhere('name', 'like', '%' . $query . '%')
                    ->orWhere('role', 'like', '%' . $query . '%')
                    ->orWhere('email', 'like', '%' . $query . '%')
                    ->orWhere('password', 'like', '%' . $query . '%')
                    ->orderBy('id', 'desc')
                    ->get();
            } else {
                $data = DB::table('users')
                    ->orderBy('id', 'desc')
                    ->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {

                    $output .= '
         <tr class="' . $row->id . '">
         <td>' . $row->name . '</td>
         <td>' . $row->role . '</td>
         <td>' . $row->email . '</td>
         <td>' . $row->phone . '</td>
         <td><a href="/users/edit/' . $row->id . '" class="btn btn-info">edit</a>

             <a href="javascript:void(0)" data-id="' . $row->id .
                        '" class="btn btn-danger" id="delete">delete</a>
                                            </td>
        </tr>
        ';
                }
            } else {
                $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
            // dd($data);

        }
    }

    function FileUpload(Request $request)
    {

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                    'image' => 'mimes:jpeg,png',
                ]);
                $extension = $request->image->extension();
                $request->image->storeAs('/public', Auth::user()->name . "." . $extension);
                $url = Storage::url(Auth::user()->name . "." . $extension);

                // if profile already exist then update else insert
                if (File::where('user_id', Auth::user()->id)->exists()) {
                    File::where('user_id', Auth::user()->id)
                        ->update(['profiel' => $url]);
                } else {
                    $file = File::create([
                        'user_id' => Auth::user()->id,
                        'profiel' => $url,

                    ]);
                }

                $request->session()->flash('success',  "Success!");
                // return redirect('/dashboard/profile');
            }
        }

        return view('dashboard.profile.profile', [
            'profile' => File::where('user_id', Auth::user()->id)
                ->get(),
            'data' => 1,
        ]);
    }

    function UpdatePassword(Request $request)
    {

        $validated = $request->validate([
            'password' => 'required|confirmed',
        ]);

        User::where('id', Auth::user()->id)
            ->update(['password' => Hash::make($request->password)]);

        return redirect('/dashboard/profile');
    }
}
