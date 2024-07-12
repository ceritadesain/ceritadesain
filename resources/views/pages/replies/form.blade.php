@extends('layouts.app')

@section('body')
    <section class="text-white pt-4 pb-5">
        <div class="container">
            <div class="mb-5">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="d-flex">
                        <div class="fs-2 fw-bold me-2 mb-0">
                            Perbarui Balasan
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-center ">
                <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                    <div class="card card-discussions mb-5">
                        <div class="row">
                            <div class="col-12 text-white">
                                <form action="{{ route('replies.update', $reply->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="reply_content" class="form-label">Perbarui Balasan</label>
                                        <textarea class="form-control text-white" id="reply_content" name="reply_content">{{ $reply->reply_content }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary me-4">Simpan Perubahan</button>
                                        <a href="{{ back()->getTargetUrl() }}" class="btn btn-secondary">Batal</a>
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
            $('#reply_content').summernote({
                placeholder: 'Tulis balasan di sini...',
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
        });
    </script>
@endsection
