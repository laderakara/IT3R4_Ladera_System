<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Traits\ApiResponser;
    use App\Model\User;
    use DB;

    Class UserController extends Controller {
        use ApiResponser;
        private $request;

        public function __construct(Request $request){
        $this->request = $request;
        }
        
        public function getUser(){
            $users = app('db')->select("SELECT * FROM users");
            return $this->successResponse($users);
        }

        public function getLogin(){
            return view('login');
        }

        public function postValidate(){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = app('db')->select("SELECT * FROM users WHERE username='$username' and password='$password'");
            if(empty($user)){
                return 'Invalid Input.';
            }else{
                return redirect()->route('dashboard');
            }  
        }

        public function getDashboard(){
            $id = app('db')->select("SELECT id FROM users");
            $username = app('db')->select("SELECT username FROM users");
            $password = app('db')->select("SELECT password FROM users");
            $data = [
                'id'=>$id,
                'username'=>$username,
                'password'=>$password
            ];
            return view('dashboard')->with($data);
        }

        public function postCreateUser(Request $request){
            $this->postValidate($request, [
                'username' => 'required|max:50',
                'password' => 'required|max:50'
            ]);
            $users = app('db')->select("SELECT * FROM users"); 
            if(count($users)>0){
                $idcount = DB::table('users')->orderBy('id', 'DESC')->first();
                $idcount = $idcount->id;
                $user = new User;
                $user->id=($idcount+1);
                $user->password = $request->input('password');
                $user->username = $request->input('username');
                if ($user->save()) {
                    return redirect()->route('dashboard');
                } else {
                }
            }else{
                $user = new User;
                $user->id = (count($users)+ 1);
                $user->password = $request->input('password');
                $user->username = $request->input('username');
                if ($user->save()) {
                    return redirect()->route('dashboard');
                } else {
                }
            }   
        }

        public function postCreate(){
            return view('create');
        }

        public function postEdit(){
            $id = app('db')->select("SELECT id FROM users");
            $username = app('db')->select("SELECT username FROM users");
            $password = app('db')->select("SELECT password FROM users");
            $data = [
                'id' => $id,
                'username' => $username,
                'password' => $password
            ];
            return view('edit')->with($data);
        }

        public function postUpdate(){
            $id = $_POST['idSearch'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            app('db')->table('users')->where('id', $id)->update(['username' => $username, 'password' => $password]);
            return redirect()->route('dashboard');
        }

        public function postDelete(){
            $id = $_POST['delete_id'];
            $user = User::find($id);
            $user->delete();
            return redirect()->route('dashboard');
        }
    }
?>
