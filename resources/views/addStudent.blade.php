<div>
    <form action="/add" method="post">
        @csrf
        Name: <input type="text" name="name" /><br>
        Batch: <input type="number" name="batch" /><br>
        City: <input type="text" name="city" /><br>
        <input type="submit" value="Submit"/>
    </form>
</div>
