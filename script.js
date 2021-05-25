const hero = document.querySelector(".hero");
const details = document.querySelector(".details");
const cta = document.querySelector(".cta");

/////////////////////////////////STICKY BUTTON/////////////////////////////////////////////////////////

const stickyBtn = document.querySelector(".button__primary--sticky");
const btnHeight = stickyBtn.getBoundingClientRect().height;

const stickyButton = function (entries) {
  const [entry] = entries;
  if (!entry.isIntersecting) stickyBtn.classList.remove("hidden");
  else stickyBtn.classList.add("hidden");
};

const observerSticky = new IntersectionObserver(stickyButton, {
  root: null,
  threshold: 0.1,
  rootMargin: `-${btnHeight}px`,
});

observerSticky.observe(hero);
observerSticky.observe(cta);

/*
window.addEventListener("scroll", function () {
  if (window.scrollY > detailsCoords.top) {
    stickyBtn.classList.remove("hidden");
  }
  if (window.scrollY > ctaCoords.top) {
    stickyBtn.classList.add("hidden");
  }
});
*/

/////////////////////////////////REVEALING PANELS////////////////////////////////////////////////////////

// const detailsCoords = details.getBoundingClientRect();
const detailsContent = document.querySelector(".details__content");
// const ctaCoords = cta.getBoundingClientRect();
const ctaContent = document.querySelector(".cta__content");

const revealDetails = function (entries) {
  const [entry] = entries;
  if (!entry.isIntersecting) detailsContent.classList.remove("hidden-panel");
};

const revealForm = function (entries) {
  const [entry] = entries;
  if (!entry.isIntersecting) ctaContent.classList.remove("hidden-panel");
};

const detailsObserver = new IntersectionObserver(revealDetails, {
  root: null,
  threshold: 0,
  rootMargin: "-16px",
});

const ctaObserver = new IntersectionObserver(revealForm, {
  root: null,
  threshold: 0,
});

detailsObserver.observe(hero);
ctaObserver.observe(details);

/*
window.addEventListener("scroll", function (e) {
  if (window.scrollY >= detailsCoords.top) {
    detailsContent.classList.remove("hidden-panel");
  }
});

window.addEventListener("scroll", function (e) {
  if (window.scrollY >= detailsCoords.top + 500) {
    ctaContent.classList.remove("hidden-panel");
  }
});
*/

///////////////////////////////////SMOOTH SCROLL///////////////////////////////////////////////////////////

const btnScroll = document.querySelector(".button__scroll");
const btnHero = document.querySelector(".hero__button");

btnScroll.addEventListener("click", function (e) {
  details.scrollIntoView({ behavior: "smooth", block: "center" });
});

stickyBtn.addEventListener("click", function (e) {
  cta.scrollIntoView({ behavior: "smooth", block: "start" });
});

btnHero.addEventListener("click", function (e) {
  cta.scrollIntoView({ behavior: "smooth", block: "start" });
});

///////////////////////////////////FORM VALIDATION/////////////////////////////////////////////////////////

const nameInput = document.getElementById("nimi");
const phoneInput = document.getElementById("telefon");
const emailInput = document.getElementById("epost");
const commentInput = document.getElementById("kommentaar");
const form = document.querySelector(".cta__form");
let isFormValid = false;


const validateInputs = () => {
  isFormValid = true;
  nameInput.classList.remove("errorbrdr");
  phoneInput.classList.remove("errorbrdr");
  emailInput.classList.remove("errorbrdr");
  commentInput.classList.remove("errorbrdr");

  if (!nameInput.value) {
    isFormValid = false;
    nameInput.classList.add("errorbrdr");
  } else if (!phoneInput.value) {
    isFormValid = false;
    phoneInput.classList.add("errorbrdr");
  } else if (!emailInput.value) {
    isFormValid = false;
    emailInput.classList.add("errorbrdr");
  } else if (!commentInput.value) {
    isFormValid = false;
    commentInput.classList.add("errorbrdr");
  }
};

form.addEventListener("submit", (e) => {
  e.preventDefault();
  validateInputs();
});

///////////////////////////////CLOSING COOKIES ALERT//////////////////////////////////////////////////

const btnCookies = document.querySelector(".cookies__button");
const cookies = document.querySelector(".cookies");

btnCookies.addEventListener("click", function () {
  cookies.classList.add("hidden");
});
