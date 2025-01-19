@extends('layout.master')

@section('content')

<div class="" style="background: linear-gradient(to bottom, rgb(65, 128, 117), #76AADB); padding: 40px;">
    <div style="margin-top: 135px;">
        <div class="container mt-5">
            <h2>Edit Comment</h2>
            <form action="{{ route('comments.update', $comment->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea name="comment" id="comment" class="form-control" rows="4">{{ old('comment', $comment->comment) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update Comment</button>
            </form>
        </div>
    </div>
</div>

@endsection