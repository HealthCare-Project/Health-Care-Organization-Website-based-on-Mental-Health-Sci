<form method="POST" action="{{route('new-password', ['token' => $token])}}">
    {{ csrf_field() }}
	<div class="form-group">
        <label for="password">New Password:</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>