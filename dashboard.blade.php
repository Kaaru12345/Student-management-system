@extends('layouts.app')

@section('content')
<h1>Dashboard</h1>
<div class="card">
    <strong>Total Students:</strong> <?php echo $total; ?><br>
    <strong>Average Marks:</strong> <?php echo round($avgMarks,2); ?>
</div>
@endsection
