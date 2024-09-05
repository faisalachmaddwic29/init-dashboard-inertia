# dashboard-erat

berikut sample DATA : 

[
    {
        "name": "Likuiditas",
        "data": [
            {
                "name": "Rasio Kas",
                "items": [
                    {
                        "name": "Kasio dan Bank",
                        "value": "239667896191"
                    },
                    {
                        "name": "Kewajiban Lancar",
                        "value": "1277543165058"
                    },
                    {
                        "name": "Ratio",
                        "type": "progress",
                        "value": "19"
                    },
                    {
                        "name": "Min Ratio",
                        "type": "progress",
                        "value": "10"
                    }
                ]
            },
            {
                "name": "Rasio Volume Pinjaman",
                "items": [
                    {
                        "name": "Piutang Anggota",
                        "value": "239667896191"
                    },
                    {
                        "name": "Simpanan Anggota",
                        "value": "1277543165058"
                    },
                    {
                        "name": "Ratio",
                        "type": "progress",
                        "value": "82"
                    },
                    {
                        "name": "Min Ratio",
                        "type": "progress",
                        "value": "80"
                    }
                ]
            }
        ]
    },
    {
        "name": "Risiko Reputasi",
        "data": [
            {
                "name": "Jumlah Pengaduan Anggota",
                "items": [
                    {
                        "name": "Risk Appetite",
                        "value": "3"
                    },
                    {
                        "name": "Risiko",
                        "value": "6"
                    },
                    {
                        "name": "Risk Appetite",
                        "type": "progress",

                        "value": "50"
                    },
                    {
                        "name": "Risk Tolerance",
                        "type": "progress",

                        "value": "10"
                    }
                ]
            },
            {
                "name": "Jumlah Pemberitaan Negarif yang berasosiasi dengan koperasi",
                "items": [
                    {
                        "name": "Risk Appetite",
                        "value": "3"
                    },
                    {
                        "name": "Risiko",
                        "value": "6"
                    },
                    {
                        "name": "Risk Appetite",
                        "type": "progress",
                        "value": "50"
                    },
                    {
                        "name": "Risk Tolerance",
                        "type": "progress",
                        "value": "3"
                    }
                ]
            }
        ]
    },
    {
        "name": "Risiko Kredit",
        "data": [
            {
                "name": "Npl Net",
                "items": [
                    {
                        "name": "Total",
                        "value": "2382474898650"
                    },
                    {
                        "name": "Total Npl",
                        "value": "19450353345"
                    },
                    {
                        "name": "Persen Appetite",
                        "type": "progress",
                        "value": "19"
                    },
                    {
                        "name": "Persen Tolerance",
                        "type": "progress",
                        "value": "10"
                    }
                ]
            },
            {
                "name": "Rasio Kredit Berkualitas Rendah Per Total Kredit",
                "items": [
                    {
                        "name": "Total",
                        "value": "2263639784399"
                    },
                    {
                        "name": "Total Resiko Rendah",
                        "value": "26316020935"
                    },
                    {
                        "name": "Ratio",
                        "type": "progress",
                        "value": "82"
                    },
                    {
                        "name": "Min Ratio",
                        "type": "progress",
                        "value": "80"
                    }
                ]
            }
        ]
    },
    {
        "name": "Risiko Strategik",
        "description": "Rasio Perbandingan Realisasi dan Target indikator sesuai dengan rencana bisnis Koperasi",
        "data": [
            {
                "name": "Pendapatan Operasional",
                "items": [
                    {
                        "name": "Realisasi",
                        "value": "405532117379.42"
                    },
                    {
                        "name": "Target",
                        "value": "791230000000.00"
                    },
                    {
                        "name": "Presentase",
                        "type": "progress",
                        "value": "51.25"
                    }
                ]
            },
            {
                "name": "Biaya Operasional",
                "items": [
                    {
                        "name": "Realisasi",
                        "value": "405532117379.42"
                    },
                    {
                        "name": "Target",
                        "value": "791230000000.20"
                    },
                    {
                        "name": "Presentase",
                        "type": "progress",
                        "value": "57.71"
                    }
                ]
            },
            {
                "name": "Sisa Hasil Usaha (SHU) sebelum pajak",
                "items": [
                    {
                        "name": "Realisasi",
                        "value": "405532117379.42"
                    },
                    {
                        "name": "Target",
                        "value": "791230000000.00"
                    },
                    {
                        "name": "Presentase",
                        "type": "progress",
                        "value": "43.1"
                    }
                ]
            }
        ]
    }
]


contoh data diatas tinggal di sesuaikan saja lalu setelah itu langsung di masukan ke db valuenya aja yang diganti ya

thanks
