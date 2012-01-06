function superfishfx(whichfx) {
  var expireDate = new Date()
  var expstring=expireDate.setDate(expireDate.getDate()+30)

  document.cookie = "superfishfx=" + whichfx + "; expires="+expireDate.toGMTString()
}
