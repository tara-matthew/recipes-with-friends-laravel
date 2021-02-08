module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            minHeight: {
                '1/4': '25%',
            },
            height: {
                'without-header': 'calc(100% - 3rem)'
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
