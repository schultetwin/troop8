function superfishease(whichease) {
  var expireDate = new Date()
  var expstring=expireDate.setDate(expireDate.getDate()+30)

  document.cookie = "superfishease=" + whichease + "; expires="+expireDate.toGMTString()
}
