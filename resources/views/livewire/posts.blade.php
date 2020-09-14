<div class="container">
    <div class="row justify-content-center">
        @livewire('post-form')
    </div>
    @if ($posts->count())
    <div class="row justify-content-center">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>
    @endif
</div>
