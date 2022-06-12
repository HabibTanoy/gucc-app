@extends('layouts.dashboard')

@section('content')
    <div class="main-content">
        <div class="card">
            <div class="card-header">
                <h4>Teams</h4>
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
                    @foreach($teams as $team)
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
                                            <img src="{{URL::asset($team->image)}}" class="m-2" width="100px" height="80px" alt="">
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p>{{$team->card_title}}</p>
                            </td>
                            <td>{{$team->card_body_details}}</td>
                            <td>
                                <div class="badge @if ($team->is_active == 0) badge-danger @else badge-success @endif">
                                    @if ($team->is_active == 0) Inactive
                                    @else Active
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-4">
                                        @if ($team->is_active == 0)
                                            <a class="btn btn-primary" href="{{route('teams.show', $team->id)}}">Active</a>
                                        @else
                                            <a class="btn btn-danger" href="{{route('teams.show', $team->id)}}">Inactive</a>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <a class="btn btn-primary" href="{{route('teams.edit', $team->id)}}">Update</a>
                                    </div>
                                    <div class="col-md-4">
                                        <form class="" action="{{route('teams.destroy', $team->id)}}" method='post'>
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
                {{ $teams->links() }}
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
