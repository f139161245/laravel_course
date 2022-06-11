
@extends('layouts.app')

<form action="{{ route('upd',Request::route('id')) }}" method="post">
    @csrf
       <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Name</label>
    <input  name="post_name" value="{{ $posts->name }}" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input namw">
</div>
<div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Another label</label>
    <input  value="{{ $posts->email }}" name="post_email" type="email" class="form-control" id="formGroupExampleInput2" placeholder="Another input email">
</div>
<div class="mb-3">
    <input type="submit" value="update">
</div>

</form>