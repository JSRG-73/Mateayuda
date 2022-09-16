!(function () {
    let e = document.createElement("script"),
      t = document.head || document.getElementsByTagName("head")[0];
    (e.src =
      "https://cdn.jsdelivr.net/npm/rasa-webchat@1.0.1/lib/index.js"),
      (e.async = !0),
      (e.onload = () => {
        window.WebChat.default(
          {
            //initPaylod accion por default al inicio
            initPayload: "/saludo",
            //titulo del bot y subtitulo
            title: "Roboto",
            subtitle: "Amo las matemáticas",
            //mensaje de input
            inputTextFieldHint: "Escribe un mensaje...",
            connectingText: "Roboto está escribiendo...",
            customData: { language: "es" },
            socketUrl: "http://localhost:5005",
          },
          null
        );
      }),
      t.insertBefore(e, t.firstChild);
  })();