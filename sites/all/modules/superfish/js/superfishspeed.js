function superfishspeed(whichspeed) {
  var expireDate = new Date()
  var expstring=expireDate.setDate(expireDate.getDate()+30)

  document.cookie = "superfishspeed=" + whichspeed + "; expires="+expireDate.toGMTString()
}
