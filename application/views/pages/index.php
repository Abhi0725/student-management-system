<table class="table table-striped table-hover table-bordered table-condensed">
<?php foreach ($student_records as $student): ?>

        <tr>
        	<td><?php echo $student['name'] ?></td>
        	<td><a href="<?php echo site_url('students')?>/edit/<?php echo $student['id'] ?>" class="btn btn-default">Edit</a></td>
        	<td><a href="javascript:void(0);" onclick="deleteRecord(<?php echo $student['id'] ?>);" class="btn btn-danger">delete</a></td>
        <tr>

<?php endforeach ?>

</table>

<a href="<?php echo site_url('students')?>/add" class="btn btn-primary">Add Student</a>