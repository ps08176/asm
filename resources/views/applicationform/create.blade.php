@if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    </ul>
    @endforeach
{{ Form::open(array('url' => 'applicationform')) }}
    
    <table>
    <tr>
        <td>Full name:</td>
        <td>{{Form::text('fullname')}}</td>
    </tr>
    <tr>
        <td>ID Number:</td>
        <td>{{Form::text('idnumber')}}</td>
    </tr>
    <tr>
        <td>Hometown:</td>
        <td>{{Form::select('hometown',$provinces)}}</td>
    </tr>
    <p>
    {{Form::submit('Thực Hiện')}}    
    </p>
    <p>
        {{$result ?? ''}}
    </p>
    </table>
{{ Form::close() }}