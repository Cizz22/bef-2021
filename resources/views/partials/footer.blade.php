<footer>
    <div class="pesan d-xl-block d-none">
      <h5 class="pb-4 text-center">Apa yang ingin kamu sampaikan?</h5>
      <form action="#">
        <div class="mb-3 input-group">
          <input type="text" class="form-control" placeholder="Ketik disini">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Kirim</button>
        </div>
      </form>
    </div>
    <div class="container pt-5 mt-5">
        <div class="row d-xl-none d-block">
            <div class="pesan-mobile">
              <h5 class="pb-4 text-center">Apa yang ingin kamu sampaikan?</h5>
              <form action="{{route('landing.contact')}}" method="get">
                <div class="mb-3 input-group">
                  <input type="text" name="question" class="form-control" placeholder="Ketik disini">
                  <button class="btn btn-outline-secondary" type="button" id="button-addon2">Kirim</button>
                </div>
              </form>
            </div>
        </div>
      <nav>
        <div class="row">
          <div class="col-lg d-flex align-self-stretch justify-content-center align-items-center">
            <a href="#sharing" class="my-2 text-center nav-link w-100 my-lg-0">Sharing & Motivating</a>
          </div>
          <div class="col-lg d-flex align-self-stretch justify-content-center align-items-center">
            <a href="#tryout" class="my-2 text-center nav-link w-100 my-lg-0">Try Out UTBK</a>
          </div>
          <div class="col-lg d-flex align-self-stretch justify-content-center align-items-center">
            <a href="#expo-campus" class="my-2 text-center nav-link w-100 my-lg-0">Expo Campus</a>
          </div>
          <div class="col-lg d-flex justify-content-center align-items-center">
            <a href="blogs" class="my-2 text-center nav-link w-100 my-lg-0">Blog</a>
          </div>
          <div class="col-lg-4 col-12">
            <div class="p-0 text-center container-fluid text-lg-end">
              <div class="row">
                <h4>Temukan Kami di Sosial Media!</h4>
              </div>
              <div class="row">
                <div class="col">
                  <a href="https://www.instagram.com/bef1decade/" target="_blank">
                    <i class="fab fa-instagram social-link" aria-hidden="true"></i>
                  </a>
                  <a href="https://www.youtube.com/channel/UCQK0CVkk7e2Ws4pHMySarlw" target="_blank">
                    <i class="fab fa-youtube social-link" aria-hidden="true"></i>
                  </a>
                  <a href="https://vt.tiktok.com/ZSeudRvwR/" target="_blank">
                    <i class="fab fa-tiktok social-link"></i>
                  </a>
                  <a href="https://wa.me/6285201106263" target="_blank">
                    <i class="fab fa-whatsapp social-link"></i>
                  </a>
                  <a href="https://line.me/ti/p/~nafamyka" target="_blank">
                    <i class="fab fa-line social-link"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-5 mb-0 row">
          <div class="text-center col-12">
            <p style="font-size: 22px; opacity: .65;">&copy; BEF 2022</p>
          </div>
        </div>
      </nav>
    </div>
  </footer>
