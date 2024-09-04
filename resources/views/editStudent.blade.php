<div>
    <h2>Update Student Details</h2>
    <form action="/update/{{$data->id}}" methods="post">
        @csrf
        <input type="hidden" name="_method" value="put" /> <br>
        <input type="text" name="name" value="{{$data->name}}" /> <br>
        <input type="text" name="city" value="{{$data->city}}" />  <br>
        <input type="number" name="batch" value="{{$data->batch}}" />  <br>
        <input type="submit"  value="Update" />  <a href="/">Cancel</a>

    </form>
</div>
