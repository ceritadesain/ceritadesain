@extends('layouts.app')

@section('body')
    <section class="text-white pt-4 pb-5 ">
        <div class="container ">
            <div class="mb-5 ">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="d-flex ">
                        <div class="fs-2 fw-bold me-2 mb-0">
                            Buat Diskusi Baru!
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-center ">
                <div class="col-12 col-lg-8 mb-5 mb-lg-0 ">
                    <div class="card card-discussions mb-5 ">
                        <div class="row">
                            <div class="col-12">
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Judul</label>
                                        <input type="text" class="form-control" id="title" name="title" autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <label for="category_slug" class="form-label">Kategori</label>
                                        <select class="form-select text-black" name="category_slug" id="category_slug">
                                            <option value="design-principles">Prinsip Desain</option>
                                            <option value="user-research">Riset Pengguna</option>
                                            <option value="prototyping">Prototyping</option>
                                            <option value="usability-testing">Usability Testing</option>
                                            <option value="accessibility">Aksesibilitas</option>
                                            <option value="visual-design">Desain Visual</option>
                                            <option value="interaction-design">Desain Interaksi</option>
                                            <option value="information-architecture">Arsitektur Informasi</option>
                                            <option value="wireframing">Wireframing</option>
                                            <option value="user-personas">User Personas</option>
                                            <option value="responsive-design">Desain Responsif</option>
                                            <option value="mobile-ux">UX Mobile</option>
                                            <option value="ui-development">Pengembangan UI</option>
                                            <option value="microinteractions">Microinteractions</option>
                                            <option value="content-strategy">Strategi Konten</option>
                                            <option value="a-b-testing">A/B Testing</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="content" class="form-label ">Ceritakan Pengalamanmu atau Masukkan
                                            Sebuah pertanyaan
                                        </label>
                                        <textarea class="form-control text-white" id="content" name="content"></textarea>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary me-4" type="submit">Kirim</button>
                                        <a href="">Batal</a>
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
            $('#content').summernote({
                placeholder: 'Rincian masalah Anda | Apa yang sudah Anda coba | Apa yang Anda harapkan',
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
