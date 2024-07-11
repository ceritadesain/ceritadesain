@extends('layouts.app')
@section('body')
    <section class="text-white pt-4 pb-5">
        <div class="container ">
            <div class="mb-5 d-flex align-items-center justify-content-center">
                <h1>Update Profil</h1>
            </div>
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12 col-lg-5">
                    <form action="{{ route('users.update', $user->username) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="d-flex flex-column flex-md-row mb-4">
                            <div class="row">
                                <div class="col-6 col-lg-6 edit-avatar-wrapper mb-3 mb-md-0 mx-auto mx-md-0">
                                    <div class="avatar-wrapper rounded-circle overflow-hidden flex-shrink-0 me-4">
                                        <img id="avatar" src="{{ $picture }}" alt="" class="avatar">
                                    </div>
                                    <label for="picture" class="btn p-0 edit-avatar-show"><img
                                            src="{{ url('assets/images/edit-circle.png') }}" alt="Edit Circle"></label>
                                    <input type="file" class="d-none " id="picture" name="picture" accept="image/*">
                                    @error('picture')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 col-lg-6 ">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror "
                                            id="username" name="username" value="{{ old('username', $user->username) }}"
                                            autofocus>
                                        @error('username')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            id="password" name="password">
                                        <div class="fs-12px color-gray mt-1">
                                            Kosongkan ini jika kamu tidak ingin mengubah kata sandimu
                                        </div>
                                        <div>
                                            <ul class="fs-12px color-gray mt-1 ">
                                                <li>Harus memiliki minimal 8 karakter.</li>
                                                <li>Harus mengandung minimal satu angka.</li>
                                                <li>Harus mengandung minimal satu simbol.</li>
                                                <li>Harus mengandung minimal satu huruf besar dan satu huruf kecil.</li>
                                            </ul>
                                        </div>
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                        <input type="password"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            id="password_confirmation" name="password_confirmation">
                                        <div class="fs-12px color-gray mt-1">
                                            Kosongkan ini jika Anda tidak ingin mengubah kata sandi Anda
                                        </div>
                                        <div>
                                            <ul class="fs-12px color-gray mt-1">
                                                <li>Harus memiliki minimal 8 karakter.</li>
                                                <li>Harus mengandung minimal satu angka.</li>
                                                <li>Harus mengandung minimal satu simbol.</li>
                                                <li>Harus mengandung minimal satu huruf besar dan satu huruf kecil.</li>
                                            </ul>
                                        </div>
                                        @error('password_confirmation')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 ms-auto">
                            <div class="d-flex align-content-center">
                                <div> <button class="btn btn-primary me-4" type="submit">Simpan</button></div>
                                <div class="row d-flex align-content-center">
                                    <a href="{{ route('users.show', $user->username) }}">Batal</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('after-script')
    <script>
        $('#picture').on('change', function(event) {
            var output = $('#avatar');
            output.attr('src', URL.createObjectURL(event.target.files[0]))
            output.onload = function() {
                URL.revokeObjectURL(output.attr('src'))
            }

        })
    </script>
@endsection
