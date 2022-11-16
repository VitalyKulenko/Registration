window.cookieStorage = {
    getItem(key) {
        let cookies = document.cookie.split(";");
        for (let i = 0; i < cookies.length; i++) {
            let cookie = cookies[i].split("=");
            if (key == cookie[0].trim()) {
                return decodeURIComponent(cookie[1]);
            }
        }
        return null;
    },
    setItem(key, value) {
        document.cookie = key+' = '+encodeURIComponent(value)
    }
}