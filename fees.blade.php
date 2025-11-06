@extends('layouts.app')

@section('content')
<h1>Fees</h1>
<div class="card">
    <table>
        <thead><tr><th>Student ID</th><th>Name</th><th>Total Fees</th><th>Paid</th><th>Balance</th></tr></thead>
        <tbody>
            <?php foreach($students as $s): ?>
                <?php $total=50000; $paid = rand(20000,50000); $bal=$total-$paid; ?>
                <tr>
                    <td><?php echo $s->student_id; ?></td>
                    <td><?php echo $s->name; ?></td>
                    <td><?php echo $total; ?></td>
                    <td><?php echo $paid; ?></td>
                    <td><?php echo $bal; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
@endsection
