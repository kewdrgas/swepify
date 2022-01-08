<div class="heroSection">
  <div class="container container--fluid p0-sm">
    <div class="heroSection__apla" style="background-image: url(<?= $data['apla'] ?>)"></div>
    <div class="container container--fluid">
      <div class="heroSection__wrapper">
        <div class="heroSection__text">
          <h1 class="heroSection__title slideanim"><?= $data['title'] ?></h1>
          <div class="heroSection__writingWord slideanim">
            <vue-typer
              :text='<?= json_encode($data['types']) ?>'
              :pre-type-delay='100'
              :type-delay='150'
              :pre-erase-delay='350'
              :erase-delay='50'
              erase-style='backspace'
            ></vue-typer>
          </div>
          @guest
            <form action="" method="GET" class="heroSection__buttonSignUp slideanim">
              <input type="email" name="email" class="heroSection__input" placeholder="<?= $data['form']['input_placeholder'] ?>">
              <button class="button button__primary"><span><?= $data['form']['button'] ?></span></button>
            </form>
          @endguest
          <div class="heroSection__buttonVideo slideanim">
            <button
              class="heroSection__buttonVideo--link"
              data-modal-button="video"
              data-modal-title='<?= $data['video']['title'] ?>'
              data-modal-video="<?= $data['video']['link'] ?>"
            >
              <div class="heroSection__buttonVideo--icon icon icon-play"></div>
              <div class="heroSection__buttonVideo--text"><?= $data['video']['title'] ?></div>
            </button>
          </div>
        </div>
        <div class="heroSection__images line-a">
          <img src="<?=$data['image-desktop']?>" alt="Roleshare" class="heroSection__image heroSection__image--desktop slideanim" />
          <img src="<?=$data['image-landscape']?>" alt="Roleshare" class="heroSection__image heroSection__image--landscape slideanim" />
          <img src="<?=$data['image-mobile']?>" alt="Roleshare" class="heroSection__image heroSection__image--mobile slideanim" />
        </div>
      </div>
    </div>
  </div>
</div>