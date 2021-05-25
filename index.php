<?php get_header(); ?>
             
<section class="hero">
  <nav>
    <div class="hero__logo">
      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/logo-white.svg" alt="Ringi Äripark logo" />
    </div>
    <div class="hero__languages">
      <a href="#" class="body__XS hero__link bold">EST</a>
      <a href="#" class="body__XS hero__link">ENG</a>
    </div>
  </nav>
  <div class="hero__content">
    <div class="hero__title">
      <h1>
          <?php the_field('hero_title');?>
      </h1>
    </div>
    <div class="hero__title--mobile">
      <h1>
          <?php the_field('hero_title_mobile');?>
      </h1>
    </div>
      <button class="button__primary hero__button">
      <?php the_field('main_button');?>
    </button>
  </div>
  <div class="cookies">
    <div class="cookies__content">
      <p class="body__XS">
        See veebileht kasutab küpsiseid. Tutvu meie
        <a href="#">privaatsuspoliitikaga.</a>
      </p>
      <button class="button__secondary cookies__button">Selge</button>
    </div>
  </div>
  <button class="button__scroll">
    <img src="<?php echo get_template_directory_uri(); ?>/images/iko-down.svg" alt="Nool alla" />
  </button>
</section>

<section class="details">
  <div class="details__imgbox">
    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/ringi-aripark3.jpg" alt="3D kujutis tulevasest äripargist" />
  </div>
  <div class="details__content hidden-panel">
    <table class="table">
      <thead>
        <tr>
          <h2 class="details__title">Detailinfo</h2>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Tüüp</td>
          <td>100% ärimaa</td>
        </tr>
        <tr>
          <td>Brutopind</td>
          <td>29 000 m</td>
        </tr>
        <tr>
          <td>Hooneid</td>
          <td>Kuni 5</td>
        </tr>
        <tr>
          <td>Korruseid</td>
          <td>Kuni 5</td>
        </tr>
        <tr>
          <td>Hoonestuskõrgus</td>
          <td>Kuni 20 m</td>
        </tr>
        <tr>
          <td>Kasutusotstarve</td>
          <td>Kaubandus, teenindus, showroom, büroo, ladu, väiketootmine</td>
        </tr>
        <tr>
          <td>Parkimine</td>
          <td>Krundil, tasuta</td>
        </tr>
        <tr>
          <td>Energiamärgis</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Tehnovõrgud</td>
          <td>Vesi ja kanalisatsioon, gaas, elekter, side</td>
        </tr>
        <tr>
          <td>Valmimine</td>
          <td>Kuni 24 kuud</td>
        </tr>
      </tbody>
    </table>
    <button class="button__primary">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cloud_download_white.svg" alt="Alla laadimise ikoon" />
      PDF-esitlus
    </button>
  </div>
  <div class="details__content--mobile">
    <table class="table">
      <thead>
        <tr>
          <h2 class="details__title">Detailinfo</h2>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Tüüp</td>
          <td>100% ärimaa</td>
        </tr>
        <tr>
          <td>Brutopind</td>
          <td>29 000 m</td>
        </tr>
        <tr>
          <td>Hooneid</td>
          <td>Kuni 5</td>
        </tr>
        <tr>
          <td>Korruseid</td>
          <td>Kuni 5</td>
        </tr>
        <tr>
          <td>Hoonestus-kõrgus</td>
          <td>Kuni 20 m</td>
        </tr>
        <tr>
          <td>Kasutus-otstarve</td>
          <td>Kaubandus, teenindus, showroom, büroo, ladu, väiketootmine</td>
        </tr>
        <tr>
          <td>Parkimine</td>
          <td>Krundil, tasuta</td>
        </tr>
        <tr>
          <td>Energiamärgis</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Tehnovõrgud</td>
          <td>Vesi ja kanalisatsioon, gaas, elekter, side</td>
        </tr>
        <tr>
          <td>Valmimine</td>
          <td>Kuni 24 kuud</td>
        </tr>
      </tbody>
    </table>
    <button class="button__primary">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cloud_download_white.svg" alt="Alla laadimise ikoon" />
      PDF-esitlus
    </button>
  </div>
</section>

<section class="cta">
  <div class="cta__content hidden-panel">
    <h2 class="cta__title">Võta ühendust!</h2>
    <div class="cta__contacts">
      <p>Martin Ellervee</p>
      <p>Stadium Real Estate OÜ</p>
      <span class="cta__email underline">martin@baltreal.ee</span
      ><span class="underline">+372 50 58 794</span>
    </div>
    <form action="#" class="cta__form">
      <div>
        <input type="text" placeholder="Teie nimi*" name="nimi" id="nimi" />
        <label for="nimi"></label>
      </div>
      <div>
        <input type="text" placeholder="Telefon*" name="telefon" id="telefon" />
        <label for="telefon"></label>
      </div>
      <div>
        <input type="email" placeholder="E-post*" name="epost" id="epost" />
        <label for="epost"></label>
      </div>
      <div>
        <textarea
          name="kommentaar"
          id="kommentaar"
          cols="44"
          rows="4"
          placeholder="Küsimused, soovid, ettepanekud*"
        ></textarea>
        <label for="kommentaar"></label>
      </div>
      <div class="cta__privacy">
        <p class="body__XS">
          Kasutame isikuandmeid kliendi päringule vastamiseks. Me ei edasta
          isikuandmeid kolmandetele osapooltele ega lisa isikuandmeid reklaami
          eesmärgiga andmebaasidesse.
          <a href="#">Tutvu meie privaatsuspoliitikaga.</a>
        </p>
      </div>
      <div
        class="g-recaptcha"
        data-sitekey="6Le9c9gaAAAAAFePPyRsyT9xgMQAUDRrHZrEPnYf"
      ></div>
      <input type="submit" value="Saada!" class="button__primary" />
    </form>
  </div>
  <div class="cta__content--mobile">
    <h2 class="cta__title">Võta ühendust!</h2>
    <div class="cta__contacts">
      <p>Martin Ellervee</p>
      <p>Stadium Real Estate OÜ</p>
      <span class="cta__email underline">martin@baltreal.ee</span
      ><span class="underline">+372 50 58 794</span>
    </div>
    <form action="#" class="cta__form">
      <div>
        <input type="text" placeholder="Teie nimi*" name="nimi" id="nimi" />
        <label for="nimi"></label>
      </div>
      <div>
        <input type="text" placeholder="Telefon*" name="telefon" id="telefon" />
        <label for="telefon"></label>
      </div>
      <div>
        <input type="email" placeholder="E-post*" name="epost" id="epost" />
        <label for="epost"></label>
      </div>
      <div>
        <textarea
          name="kommentaar"
          id="kommentaar"
          cols="44"
          rows="4"
          placeholder="Küsimused, soovid, ettepanekud*"
        ></textarea>
        <label for="kommentaar"></label>
      </div>
      <div class="cta__privacy">
        <p class="body__XS">
          Kasutame isikuandmeid kliendi päringule vastamiseks. Me ei edasta
          isikuandmeid kolmandetele osapooltele ega lisa isikuandmeid reklaami
          eesmärgiga andmebaasidesse.
          <a href="#">Tutvu meie privaatsuspoliitikaga.</a>
        </p>
      </div>
      <div
        class="g-recaptcha"
        data-sitekey="6Le9c9gaAAAAAFePPyRsyT9xgMQAUDRrHZrEPnYf"
        style="
          transform: scale(0.78);
          -webkit-transform: scale(0.78);
          transform-origin: 0 0;
          -webkit-transform-origin: 0 0;
        "
      ></div>
      <input type="submit" value="Saada!" class="button__primary" />
    </form>
  </div>
  <div class="cta__logo">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.svg" alt="Ringi Äripark logo" />
  </div>
</section>

<button class="button__primary button__primary--sticky hidden">
    <?php the_field('main_button');?>
</button>

<?php get_footer(); ?>
        