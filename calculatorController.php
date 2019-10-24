

class calculatorController extends Controller
{
    //
    public function calculator(Request $request){
        $num_1 = $request->post('num_1');
        $num_2 = $request->post('num_2');
        $pheptinh = $request->post('pheptinh');
        if ($pheptinh=='add') {
            $sum = $num_1 + $num_2;

        }else if($pheptinh=='sub'){
            $sum = $num_1 - $num_2;

        }
        else if($pheptinh=='mul'){
            $sum = $num_1 * $num_2;

        }
        else if($pheptinh=='div'){
            $sum = $num_1 / $num_2;

        }
        return view('calculator', ['num_1'=>$num_1, 'num_2'=>$num_2, 'pheptinh'=>$pheptinh, 'sum'=>$sum]);
    }
}
