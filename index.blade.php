@extends('layouts.app')

@section('content')
<h1>Student List</h1>
<div class="card">
    <table>
        <thead><tr><th>Student ID</th><th>Name</th><th>Section</th><th>Marks</th></tr></thead>
        <tbody>
            <?php foreach($students as $s): ?>
                <tr>
                    <td><?php echo $s->student_id; ?></td>
                    <td><?php echo $s->name; ?></td>
                    <td><?php echo $s->section; ?></td>
                    <td><?php echo $s->marks; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
@endsection
