<h1>Blog</h1>
@foreach($posts as $post)
	<h2>{{ $post->title }}</h2>
	<i>{{ $post->created_at }}</i>
	<p>{{ $post->content }}</p>
	<b>Tags:</b><br>
	<ul>
		{{-- @foreach($post->tags as $tag)
		<li>{{$tag->name}}</li>
		@endforeach --}}
	</ul>
	

	<h3>Comments</h3>@section('section', 'content')
	@foreach($post->comments as $comment)
		Nome: {{$comment->name}}<br>
		Comentário: {{$comment->comment}}
	@endforeach
	<hr>
@endforeach


