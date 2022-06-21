@extends('layouts.dashboard')

@section('content')
    <div class="main-content">
        <div class="card">
            <div class="card-header">
                <h4>Event Committee</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Card Body</th>
                        <th>Is Active</th>
                        <th>Action</th>
                    </tr>
                    @foreach($events as $event)
                        <tr>
                            <td>
                                <div class="container">
                                    <div class="modal fade" id="image-modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header" style="justify-content: end">
                                                    <button onclick="onCancel()" type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                </div>
                                                <div class="modal-body">
                                                    <img class="img-responsive center-block" src="" alt="" width="90%" height="80%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="thumbnail">
                                            <img src="{{URL::asset($event->image)}}" class="m-2" width="100px" height="80px" alt="">
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p>{{$event->card_title}}</p>
                            </td>
                            <td>{{$event->card_body_details}}</td>
                            <td>
                                <div class="badge @if ($event->is_active == 0) badge-danger @else badge-success @endif">
                                    @if ($event->is_active == 0) Inactive
                                    @else Active
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-4">
                                        @if ($event->is_active == 0)
                                            <a class="btn btn-primary" href="{{route('events.show', $event->id)}}">Active</a>
                                        @else
                                            <a class="btn btn-danger" href="{{route('events.show', $event->id)}}">Inactive</a>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <a class="btn btn-primary" href="{{route('events.edit', $event->id)}}">Update</a>
                                    </div>
                                    <div class="col-md-4">
                                        <form class="" action="{{route('events.destroy', $event->id)}}" method='post'>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $events->links() }}
            </div>
        </div>
    </div>
    <script>
        function onCancel() {
            $("#image-modal").modal('hide')
        }
        $(function() {
            $('a.thumbnail').click(function(e) {
                e.preventDefault();
                $('#image-modal .modal-body img').attr('src', $(this).find('img').attr('src'));
                $("#image-modal").modal('show');
            });
            $('#image-modal .modal-body img').on('click', function() {
                $("#image-modal").modal('hide')
            });
        });
    </script>
@endsection