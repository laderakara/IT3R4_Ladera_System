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

        public function getAdmin(){
            return view('admin');
        }

        public function getAccountant(){
            return view('accountant');
        }

        public function getSecretary(){
            return view('secretary');
        }
        
        public function getCashier(){
            return view('cashier');
        }
        
        public function getStudent(){
            return view('student');
        }

        public function postValidate(){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = app('db')->select("SELECT * FROM users WHERE username='$username' and password='$password'");
            if($username == 'admin' && $password == 'admin'){
                return redirect()->route('admin');
            }
            if($username == 'accountant' && $password == 'accountant'){
                return redirect()->route('accountant');
            }
            if($username == 'secretary' && $password == 'secretary'){
                return redirect()->route('secretary');
            }
            if($username == 'cashier' && $password == 'cashier'){
                return redirect()->route('cashier');
            }
            if($username == 'student' && $password == 'student'){
                return redirect()->route('student');
            }
            else{
                return 'Invalid Input';
            }  
        }

     
    }
?>
