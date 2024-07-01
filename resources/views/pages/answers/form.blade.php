@extends('layouts.app')

@section('body')
    <section class="text-white pt-4 pb-5 ">
        <div class="container ">
            <div class="mb-5 ">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="d-flex ">
                        <div class="fs-2 fw-bold me-2 mb-0">
                            Berikan Tanggapanmu!
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-center ">
                <div class="col-12 col-lg-8 mb-5 mb-lg-0 ">
                    <div class="card card-discussions mb-5 ">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('answers.update', $answer->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="answer" class="form-label ">Berikan tanggapanmu di bawah ya!
                                        </label>
                                        <textarea class="form-control text-white" id="answer" name="answer">{{ $answer->answer ?? old('answer') }}</textarea>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary me-4" type="submit">Kirim</button>
                                        <a href="{{ route('discussions.show', $answer->discussion->slug) }}">Batal</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('after-script')
    <script>
        $(document).ready(function() {
            $('#answer').summernote({
                placeholder: 'Bagikan pendapat atau pengalaman Anda... | Jelaskan lebih detail atau berikan solusi... | Tambahkan sumber atau referensi yang mendukung...',
                tabSize: 2,
                height: 320,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['codeview', 'help']],
                ],
                callbacks: {
                    onInit: function() {
                        $('.note-editable').css('color', 'white');
                    }
                }
            });
            $('span.note-icon-caret').remove();
        })
    </script>
@endsection
