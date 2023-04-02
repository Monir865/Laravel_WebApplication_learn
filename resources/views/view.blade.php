@extends('layouts.main')

@section('viewContainer-section')

    <table class="table" id="registerData">
        <th>
            <td scope="col">Id</td>
            <td scope="col">Name</td>
            <td scope="col">G-mail</td>
            <td scope="col">Gender</td>
            <td scope="col">Address</td>
            <td scope="col">DOB</td>
            <td scope="col">Password</td>
            <td scope="col">Status</td>
            <td scope="col">Point</td>
            <td scope="col">Create_at</td>
            <td scope="col">Update_at</td>
            <td scope="col">Action</td>
        </th>
        @foreach($customers as $customer)
        <tr>
            <td>{{$customer->customer_id}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->gmail}}</td>
            <td>{{$customer->gender}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->dob}}</td>
            <td>{{$customer->password}}</td>
            <td>{{$customer->status}}</td>
            <td>
                @if($customer->points <= 10)
                    Level-1
                @elseif($customer->points <= 15)
                    Level-2
                @elseif($customer->points <= 20)
                    Level-3
                @else
                    Admin
                @endif
            </td>
            <td>{{$customer->created_at}}</td>
            <td>{{$customer->updated_at}}</td>
            <td>
                <a href="{{url('/removeRegister')}}/{{$customer->customer_id}}"><button class="btn  btn-sm btn-danger">Remove</button></a>
                <button class="btn  btn-primary">Edit</button>
            </td>
        </tr>
        @endforeach
    </table>
@endsection