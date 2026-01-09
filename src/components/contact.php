<section class="page page__half contact" id="contact">
    <div class="container">
        <!-- Title -->
        <div class="page__title text-center">
                    <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                Ada Pertanyaan ?            </h1>
            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                <p>Ada pertanyaan atau butuh penawaran kerjasama ? Silahkan kontak kami dengan masukkan nama, email, nomor telepon, nama perusahaan dan pesan di bawah ini.</p>            </p>
            <div class="shadowTitle">
                Contact            </div> 
                 
        </div>

        <div class="row">
            <div class="col-sm-6">
            <!--Form-->
                <div class="contact__form wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.2s">
                                                            <form action="https://bitas-idc.com/frontend/savecontact/1" role="form" method="post" class="form-horizontal" id="form_contact">
                        <div class="form__field">
                            <input type="text" name="username" id="username" placeholder="Nama" class="control" required>
                        </div>
                        <div class="form__field">
                            <input type="email" name="email" id="email" placeholder="Email" class="control" required>
                        </div>
                        <div class="form__field">
                            <input type="text" name="phone" id="phone" placeholder="Nomor Telp" class="control">
                        </div>
                        <div class="form__field">
                            <input type="text" name="company_name" id="company_name" placeholder="Nama Perusahaan" class="control">
                        </div>
                        <div class="form__field">
                            <textarea name="message" id="message" cols="30" rows="6" placeholder="Pesan Anda" class="control" required></textarea>                  
                        </div>
                        <div class="button-area">
                            <button type="submit" class="btn btn__primary">Kirim Pesan</button> 
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <div class="contact__illustration wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s">
                    <img src="https://bitas-idc.com/anassets/frontend/images/svg/contact.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>