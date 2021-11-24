const location = document.querySelector('article').id;

const siteBranding = document.querySelector('.site-branding');
const homeLink= document.querySelector('.home-link');
const siteHeader = document.querySelector('.site-header');


if (location === 'post-101'){
    homeLink.style.display = 'none'
    siteBranding.innerHTML = "<p class='presentation__header'>Durant notre formation, nous avons fait différentes présentations que vous retrouverez ci-joint en téléchargement</p>"
    siteHeader.style.background = "url('../wp-content/themes/nisarg-child/css/images/bgCodage.jpeg')";
    siteHeader.style.backgroundSize = "cover";

} else if (location === 'post-99'){
    homeLink.style.display = 'none'
    siteBranding.innerHTML = "<p class='presentation__header'>Notre formation a été prévu pour une durée de 8 mois avec 2 mois de stages compris. Celle-ci à une durée de 1260 heures.\n" +
        "Durant la formation nous avons vu différentes technologies du développement web, que vous retrouvez ci-dessous.</p>"
    siteHeader.style.background = "url('../wp-content/themes/nisarg-child/css/images/developpeur.jpg)";
    siteHeader.style.backgroundSize = "cover";
}
