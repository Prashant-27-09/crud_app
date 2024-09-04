<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <h2>Students Details</h2>     
    <a href="addStudentform"><button>Add Student</button></a>

    <table border='1'>
        <tr>            
            <th>Id</th>
            <th>Name</th>
            <th>Batch</th>
            <th>City</th>
            <th>Operations</th>

        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->batch}}</td>
            <td>{{$student->city}}</td>
            <td><a href="{{'delete/'.$student->id}}"><button>Delete</button></a><a href="{{'edit/'.$student->id}}"><button>Edit</button></a></td>


        </tr>
        @endforeach

    </table>

</div>
