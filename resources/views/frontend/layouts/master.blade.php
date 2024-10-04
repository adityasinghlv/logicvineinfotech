<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./src/output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
      tailwind.config = {
          theme: {
              extend: {
                  colors: {
                      'theme1': '	#120B37',
                  },

                  animation: {
                      'appearBottom': 'appearB  linear',
                      'move1': 'move 5s linear infinite',
                      'fixed-nav': 'fixedNav 0.6s',
                      'rotate-word': 'rotateWord 18s linear infinite',
                      'move': 'move1 18s linear infinite',
                      'videoplay': 'videoplay linear',
                  },
                  keyframes: {
                      move: {
                          '0%': {
                              'offset-distance': '0%'
                          },
                          '100%': {
                              'offset-distance': '100%'
                          },
                      },
                      appearB: {
                          'from': {
                              opacity: '0',
                              transform: 'translateY(100%)'
                          },
                          'to': {
                              opacity: '1',
                              transform: 'translateY(0)'
                          }
                      },
                      fixedNav: {
                          '0%': {
                              opacity: '0',
                              transform: 'translateY(-60px)'
                          },
                          '100%': {
                              opacity: '1',
                              transform: 'translateY(0px)'
                          },
                      },
                      rotateWord: {
                          ' 0%': {
                              opacity: '0'
                          },

                          '2% ': {
                              opacity: '0',
                              transform: 'translateY(-30px)'
                          },

                          '5%': {
                              opacity: '1',
                              transform: 'translateY(0px)'
                          },

                          '17%': {
                              opacity: '1',
                              transform: 'translateY(0px)'
                          },

                          '20%': {
                              opacity: '0',
                              transform: 'translateY(30px)',
                          },

                          '80%': {
                              opacity: '0'
                          },

                          '100%': {
                              opacity: '0'
                          }
                      },
                      videoplay: {
                          'from': {
                              opacity: '0',
                              scale: '.5'
                          },
                          'to': {
                              opacity: '1',
                              scale: '1'
                          }
                      },
                  }
              },
          }
      }
  </script>
  <title>Document</title>
</head>

<body>
    @include('frontend.layouts.navbar')
    @yield('content')
    @include('frontend.layouts.footer')
    @include('frontend.layouts.script')
</body>

</html>