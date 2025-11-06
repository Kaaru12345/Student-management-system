@extends('layouts.app')

@section('content')
<h1>Add Student</h1>
<div class="card">
    <form method="POST" action="/students">
        <!-- In real Laravel include csrf_token -->
        <label>Student ID</label><br><input name="student_id"><br><br>
        <label>Name</label><br><input name="name"><br><br>
        <label>Section</label><br><input name="section"><br><br>
        <label>Marks</label><br><input name="marks" type="number"><br><br>
        <button class="btn" type="submit">Submit</button>
    </form>
</div>
@endsection
