<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
        body {
            /* background-image: url('https://i.pinimg.com/736x/e0/fa/84/e0fa84017712e6acb5a32a05029ca1e2.jpg'); */
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }
        button{
            background-color: #169999;
            
        }
        img{
            width:50px;
        }
    </style> 
</head>

<body
    <center>
    <span>
   <button>
   <a href="/admin/category/index" >Category</a>
   </button> 
   <button>
   <a href="/admin/love/index" >Love</a>
   </button> 
    </span>
        <table border="1px;" height="10px;">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Facebook</th>
                <th>Job</th>
                <th>Image</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Description</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            @foreach($love as $data)
            <tr>
                <td>{{$data -> name}}</td>
                <td>{{$data->ages}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->facebook}}</td>
                <td>{{$data->job}}</td>
                <td><img src="{{$data->image}}" alt=""></td>
                <td>{{$data->height}}</td>
                <td>{{$data->weight}}</td>
                <td>{{$data -> description}}</td>
                <td>
                    <form action="{{'/admin/love/'.$data->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit">DELETE</button>
                    </form>
                </td>
                <td>
                    <form action="{{'/admin/love/'.$data->id.'/edit'}}" method="GET">
                        <button type="submit">EDIT</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </table>
    </center>
    <center>
        <form action="/admin/love/form" method="GET">
            @csrf
            <button type="submit">INSERT</button>
        </form>
    </center>

</body>

</html>