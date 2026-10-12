function afficheId(baliseId) {
    if (document.getElementById && document.getElementById(baliseId) !== null) {
    document.getElementById(baliseId).style.visibility='visible';
    document.getElementById(baliseId).style.display='block';
    }
}
function changerImage(iGrand,iPetit) {
    var imageGrand = document.images[iGrand].src;
    document.images[iGrand].src= document.images[iPetit].src;
    document.images[iPetit].src= imageGrand;
}
function cacheId(baliseId) {
    if (document.getElementById && document.getElementById(baliseId) !== null) {
    document.getElementById(baliseId).style.visibility='hidden';
    document.getElementById(baliseId).style.display='none';
    }
}