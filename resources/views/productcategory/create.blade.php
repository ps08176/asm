@extends(('layout.masterlayout'))
 
 @section('title','Create Product Category')

 @section('main')
 {{ Form::open(array('url'=> '/productcategory'))}}

 <table>
    <tr>
        <td>Name: </td>
        <td>{{Form::text('name')}}</td>
    </tr>
    <tr>
        <td>Name: </td>
        <td>{{Form::text('display_name')}}</td>
    </tr>
    <p>
        {{Form::submit('Thực Hiện')}}
    </p>
 
 
 </table>

