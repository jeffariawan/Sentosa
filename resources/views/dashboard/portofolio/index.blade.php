@extends('layouts.dashboard')

@section('dashboard')

                    <!-- Project Anda -->
                    <article class="entry entry-single">
                        <div class="entry-meta">
                            <h4 class="h4-sentosa">Project Anda</h4>
                            <p class="lead"><a href="{{ route('dashboard.portofolio.create') }}">Tambah Article</a></p>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">name</th>
                                    <th scope="col">description</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($workerPortofolio as $port)
                                    <tr>
                                        <th scope="row"></th>
                                        <td>{{ $port->name }}</td>
                                        <td>{{ $port->description }}</td>
                                        <td>{{ $port->refService->name }}</td>
                                        <th scope="row"><a href ="{{ route('dashboard.portofolio.edit', $port->worker_portofolio_id) }}"><i class="bi bi-pencil"></i><br>Edit</th>
                                        <th scope="row"><a href ="{{ route('dashboard.portofolio.delete', $port->worker_portofolio_id) }}"><i class="bi bi-trash"></i><br>Delete</th>
                                    </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </article><!-- End Project Anda -->
@endsection