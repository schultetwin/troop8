function superfishtype(whichtype) {
  var expireDate = new Date()
  var expstring=expireDate.setDate(expireDate.getDate()+30)

  document.cookie = "superfishtype=" + whichtype + "; expires="+expireDate.toGMTString()
}
