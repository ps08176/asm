<!-- 
    <h1>CALCULATOR</h1>
    {{ Form::open(array('url' => 'calculator')) }}
    <p>NHẬP SỐ A
        {{Form::number('num_1', $num_1??'')}}
    </p>
    <p>NHẬP SỐ B
        {{Form::number('num_2', $num_2??'')}}
    </p>
    <p>
        {{Form::select('pheptinh', array('add' => '+', 'sub' => '-', 'mul' => '*','div'=>'/'))}}
    </p>
    <p>
        {{Form::submit('Thực Hiện')}}
    </p>
    <p>Kết Quả:
        {{$sum??''}}
    </p>
    {{ Form::close() }} -->
