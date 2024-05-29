@extends('layouts.layout')
@section('content')
<x-NavBar.NAVBAR/>
<x-table.tableitems>
    <x-table-header.table-header>
        Managers    <a href="{{route('manager.create')}}" class="btn btn-primary float-end">Add Manager</a>
    </x-table-header.table-header>
 <div class="container-fluid px-4">
    <div class="card-body">
    <table id="datatablesSimple" class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>PhoneNumber</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($managers as $manager)
        <tr>
            <td>{{$manager->name}}</td>
            <td>{{$manager->email}}</td>
            <td>{{$manager->phone_number}}</td>
            <td> 
                <form action="{{route('manager.edit')}}" method="get">
                <input type="hidden" name="manager_id" value="{{$manager->id}}"/>
                <button type="submit"class="btn btn-success btn-sm edit btn-flat"><i class='fa fa-edit'></i></button>
            </form>
            </td>
            <td>
                 <form action="{{route('manager.destroy')}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="manager_id" value="{{$manager->id}}"/>
                <button  onclick="return confirm('Are you sure you want to delete this Manager?')"  class="btn btn-danger btn-sm delete btn-flat" type="submit" ><i class='fa fa-trash'></i></button>
            </form>
            </td>
           
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</x-table.tableitems>
@endsection