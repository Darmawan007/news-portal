const sources = [
    {
        name: "antara",
        title: "ANTARA News",
        image: "https://www.antaranews.com/img/antaranews.com.png",
        paths: [
            {
                name: "terbaru",
                path: "https://api-berita-indonesia.vercel.app/antara/terbaru/",
            },
            {
                name: "politik",
                path: "https://api-berita-indonesia.vercel.app/antara/politik/",
            },
            {
                name: "hukum",
                path: "https://api-berita-indonesia.vercel.app/antara/hukum/",
            },
            {
                name: "ekonomi",
                path: "https://api-berita-indonesia.vercel.app/antara/ekonomi/",
            },
            {
                name: "bola",
                path: "https://api-berita-indonesia.vercel.app/antara/bola/",
            },
            {
                name: "olahraga",
                path: "https://api-berita-indonesia.vercel.app/antara/olahraga/",
            },
            {
                name: "humaniora",
                path: "https://api-berita-indonesia.vercel.app/antara/humaniora/",
            },
            {
                name: "lifestyle",
                path: "https://api-berita-indonesia.vercel.app/antara/lifestyle/",
            },
            {
                name: "hiburan",
                path: "https://api-berita-indonesia.vercel.app/antara/hiburan/",
            },
            {
                name: "dunia",
                path: "https://api-berita-indonesia.vercel.app/antara/dunia/",
            },
            {
                name: "tekno",
                path: "https://api-berita-indonesia.vercel.app/antara/tekno/",
            },
            {
                name: "otomotif",
                path: "https://api-berita-indonesia.vercel.app/antara/otomotif/",
            },
        ],
    },
    {
        name: "cnbc",
        title: "CNBC Indonesia",
        image: "https://cdn.cnbcindonesia.com/cnbc/images/logo_hitam.png",
        paths: [
            {
                name: "terbaru",
                path: "https://api-berita-indonesia.vercel.app/cnbc/terbaru/",
            },
            {
                name: "investment",
                path: "https://api-berita-indonesia.vercel.app/cnbc/investment/",
            },
            {
                name: "news",
                path: "https://api-berita-indonesia.vercel.app/cnbc/news/",
            },
            {
                name: "market",
                path: "https://api-berita-indonesia.vercel.app/cnbc/market/",
            },
            {
                name: "entrepreneur",
                path: "https://api-berita-indonesia.vercel.app/cnbc/entrepreneur/",
            },
            {
                name: "syariah",
                path: "https://api-berita-indonesia.vercel.app/cnbc/syariah/",
            },
            {
                name: "tech",
                path: "https://api-berita-indonesia.vercel.app/cnbc/tech/",
            },
            {
                name: "lifestyle",
                path: "https://api-berita-indonesia.vercel.app/cnbc/lifestyle/",
            },
            {
                name: "opini",
                path: "https://api-berita-indonesia.vercel.app/cnbc/opini/",
            },
            {
                name: "profil",
                path: "https://api-berita-indonesia.vercel.app/cnbc/profil/",
            },
        ],
    },
    {
        name: "cnn",
        title: "CNN Indonesia",
        image: "https://cdn.cnnindonesia.com/cnnid/images/logo_cnn_fav.png",
        paths: [
            {
                name: "terbaru",
                path: "https://api-berita-indonesia.vercel.app/cnn/terbaru/",
            },
            {
                name: "nasional",
                path: "https://api-berita-indonesia.vercel.app/cnn/nasional/",
            },
            {
                name: "internasional",
                path: "https://api-berita-indonesia.vercel.app/cnn/internasional/",
            },
            {
                name: "ekonomi",
                path: "https://api-berita-indonesia.vercel.app/cnn/ekonomi/",
            },
            {
                name: "olahraga",
                path: "https://api-berita-indonesia.vercel.app/cnn/olahraga/",
            },
            {
                name: "teknologi",
                path: "https://api-berita-indonesia.vercel.app/cnn/teknologi/",
            },
            {
                name: "hiburan",
                path: "https://api-berita-indonesia.vercel.app/cnn/hiburan/",
            },
            {
                name: "gayaHidup",
                path: "https://api-berita-indonesia.vercel.app/cnn/gayaHidup/",
            },
        ],
    },
    {
        name: "jpnn",
        title: "JPNN.com | Recent RSS Feed",
        image: "https://www.jpnn.com/assets/img/logojpnncom.png",
        paths: [
            {
                name: "terbaru",
                path: "https://api-berita-indonesia.vercel.app/jpnn/terbaru/",
            },
        ],
    },
    {
        name: "kumparan",
        title: "Kumparan",
        image: "https://blue.kumparan.com/kumpar/image/upload/w_600,h_600,f_jpg/main2_rqo7a5.jpg",
        paths: [
            {
                name: "terbaru",
                path: "https://api-berita-indonesia.vercel.app/kumparan/terbaru/",
            },
        ],
    },
    {
        name: "okezone",
        title: "Okezone",
        image: "https://cdn.okezone.com/underwood/revamp/2020/img/xokezone2020.png.pagespeed.ic.o1H1D1nrFk.png",
        paths: [
            {
                name: "terbaru",
                path: "https://api-berita-indonesia.vercel.app/okezone/terbaru/",
            },
            {
                name: "celebrity",
                path: "https://api-berita-indonesia.vercel.app/okezone/celebrity/",
            },
            {
                name: "sports",
                path: "https://api-berita-indonesia.vercel.app/okezone/sports/",
            },
            {
                name: "otomotif",
                path: "https://api-berita-indonesia.vercel.app/okezone/otomotif/",
            },
            {
                name: "economy",
                path: "https://api-berita-indonesia.vercel.app/okezone/economy/",
            },
            {
                name: "techno",
                path: "https://api-berita-indonesia.vercel.app/okezone/techno/",
            },
            {
                name: "lifestyle",
                path: "https://api-berita-indonesia.vercel.app/okezone/lifestyle/",
            },
            {
                name: "bola",
                path: "https://api-berita-indonesia.vercel.app/okezone/bola/",
            },
        ],
    },
    {
        name: "republika",
        title: "Republika",
        image: "https://static.republika.co.id/files/images/logo.png",
        paths: [
            {
                name: "terbaru",
                path: "https://api-berita-indonesia.vercel.app/republika/terbaru/",
            },
            {
                name: "news",
                path: "https://api-berita-indonesia.vercel.app/republika/news/",
            },
            {
                name: "daerah",
                path: "https://api-berita-indonesia.vercel.app/republika/daerah/",
            },
            {
                name: "khazanah",
                path: "https://api-berita-indonesia.vercel.app/republika/khazanah/",
            },
            {
                name: "islam",
                path: "https://api-berita-indonesia.vercel.app/republika/islam/",
            },
            {
                name: "internasional",
                path: "https://api-berita-indonesia.vercel.app/republika/internasional/",
            },
            {
                name: "bola",
                path: "https://api-berita-indonesia.vercel.app/republika/bola/",
            },
            {
                name: "leisure",
                path: "https://api-berita-indonesia.vercel.app/republika/leisure/",
            },
        ],
    },
    {
        name: "sindonews",
        title: "SINDOnews",
        image: "https://sd.sindonews.net/wp/2022/d/images/logo-sindonews-header.png",
        paths: [
            {
                name: "terbaru",
                path: "https://api-berita-indonesia.vercel.app/sindonews/terbaru/",
            },
            {
                name: "nasional",
                path: "https://api-berita-indonesia.vercel.app/sindonews/nasional/",
            },
            {
                name: "metro",
                path: "https://api-berita-indonesia.vercel.app/sindonews/metro/",
            },
            {
                name: "ekbis",
                path: "https://api-berita-indonesia.vercel.app/sindonews/ekbis/",
            },
            {
                name: "international",
                path: "https://api-berita-indonesia.vercel.app/sindonews/international/",
            },
            {
                name: "daerah",
                path: "https://api-berita-indonesia.vercel.app/sindonews/daerah/",
            },
            {
                name: "sports",
                path: "https://api-berita-indonesia.vercel.app/sindonews/sports/",
            },
            {
                name: "otomotif",
                path: "https://api-berita-indonesia.vercel.app/sindonews/otomotif/",
            },
            {
                name: "tekno",
                path: "https://api-berita-indonesia.vercel.app/sindonews/tekno/",
            },
            {
                name: "sains",
                path: "https://api-berita-indonesia.vercel.app/sindonews/sains/",
            },
            {
                name: "edukasi",
                path: "https://api-berita-indonesia.vercel.app/sindonews/edukasi/",
            },
            {
                name: "lifestyle",
                path: "https://api-berita-indonesia.vercel.app/sindonews/lifestyle/",
            },
            {
                name: "kalam",
                path: "https://api-berita-indonesia.vercel.app/sindonews/kalam/",
            },
        ],
    },
    {
        name: "tempo",
        title: "Tempo.co",
        image: "https://www.tempo.co/images/logo-tempo.png",
        paths: [
            {
                name: "nasional",
                path: "https://api-berita-indonesia.vercel.app/tempo/nasional/",
            },
            {
                name: "bisnis",
                path: "https://api-berita-indonesia.vercel.app/tempo/bisnis/",
            },
            {
                name: "metro",
                path: "https://api-berita-indonesia.vercel.app/tempo/metro/",
            },
            {
                name: "dunia",
                path: "https://api-berita-indonesia.vercel.app/tempo/dunia/",
            },
            {
                name: "bola",
                path: "https://api-berita-indonesia.vercel.app/tempo/bola/",
            },
            {
                name: "cantik",
                path: "https://api-berita-indonesia.vercel.app/tempo/cantik/",
            },
            {
                name: "tekno",
                path: "https://api-berita-indonesia.vercel.app/tempo/tekno/",
            },
            {
                name: "otomotif",
                path: "https://api-berita-indonesia.vercel.app/tempo/otomotif/",
            },
            {
                name: "seleb",
                path: "https://api-berita-indonesia.vercel.app/tempo/seleb/",
            },
            {
                name: "gaya",
                path: "https://api-berita-indonesia.vercel.app/tempo/gaya/",
            },
            {
                name: "travel",
                path: "https://api-berita-indonesia.vercel.app/tempo/travel/",
            },
            {
                name: "difabel",
                path: "https://api-berita-indonesia.vercel.app/tempo/difabel/",
            },
            {
                name: "creativelab",
                path: "https://api-berita-indonesia.vercel.app/tempo/creativelab/",
            },
            {
                name: "inforial",
                path: "https://api-berita-indonesia.vercel.app/tempo/inforial/",
            },
            {
                name: "event",
                path: "https://api-berita-indonesia.vercel.app/tempo/event/",
            },
        ],
    },
    {
        name: "tribun",
        title: "Tribunnews.com",
        image: "https://cdn-1.tstatic.net/img/logo/tribun/png/tribunnews.png",
        paths: [
            {
                name: "terbaru",
                path: "https://api-berita-indonesia.vercel.app/tribun/terbaru/",
            },
            {
                name: "bisnis",
                path: "https://api-berita-indonesia.vercel.app/tribun/bisnis/",
            },
            {
                name: "superskor",
                path: "https://api-berita-indonesia.vercel.app/tribun/superskor/",
            },
            {
                name: "sport",
                path: "https://api-berita-indonesia.vercel.app/tribun/sport/",
            },
            {
                name: "seleb",
                path: "https://api-berita-indonesia.vercel.app/tribun/seleb/",
            },
            {
                name: "lifestyle",
                path: "https://api-berita-indonesia.vercel.app/tribun/lifestyle/",
            },
            {
                name: "travel",
                path: "https://api-berita-indonesia.vercel.app/tribun/travel/",
            },
            {
                name: "parapuan",
                path: "https://api-berita-indonesia.vercel.app/tribun/parapuan/",
            },
            {
                name: "otomotif",
                path: "https://api-berita-indonesia.vercel.app/tribun/otomotif/",
            },
            {
                name: "techno",
                path: "https://api-berita-indonesia.vercel.app/tribun/techno/",
            },
            {
                name: "kesehatan",
                path: "https://api-berita-indonesia.vercel.app/tribun/kesehatan/",
            },
        ],
    },
];
