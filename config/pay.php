<?php

return [
    'alipay' => [
        'app_id'         => '2016080200152136',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnrazB2xYQp8VE2hyaIp6PPQPes7cTeu+zjSSEZwKIL8eZQfBOPsdih2I10fP9fCCJfi79d5iJrkJy2LQNywFDxHiuWCK1pDUnvDXZqMNvaXTDQFxAccW6oZoz4cuCG30kZbpG9+lDPP6XY+IenMsiHvQhz7b90B0WiQl+NxnpeNl6QWAna363Y/r5kufLJAfLj8iBM6N4OFiYYN8FgY7IHU3nYpUTwKUlEZ8fbeSOX2smSfpZbyqUHL4MpQttqiaTwdcH8irepzF/DO7S2wRzfIOPg2u2eT454vz2OBCdhprMuUUlmG7B/reAAK+zCNIDlJ3DM5vFHSwbbVMLdp7ewIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAr1VqbTZDPjXctAhOM2LLronXLD8kOCUr8WninEoUJs8U0+9DEdnKs6NkyKoaDKk/ILL3lzmVg9KAJsPFfQoXabCFPZqgVeBdZPDLXX20SuRLHpyIEYz3wXYl9nRseUl9GEX55KBVHbUZ4kDT2mnZtQa9820GBcvUwZvrrPETnEw93cHogx0ua9uHTa2UkFwXjtZjghQbl7avkp1hh5sbkB8Zh0HVQEKqRuym49vTAR10XZFzd68DKMT3wGfNuw0r+pE49sP6Qfzjnr8ZwLN0cT6K/gTCjBGwhaQ6kwVi4qlzxocsKGVd3Fq6ZnHiDEMe/3KG794kh4xXdmIlALEWTwIDAQABAoIBAQCihi2x8GOibfEYHL7IWSLutizzgdAED0jNbdY2A2DsnHX1AksMZ/LCU4ofi7W72MKAgASLdEBIwj4yMLSGdG1BdfP8J7HKCMDpyV7pWZVe+oE7beOfSSl7dhY4frDyOJGxh2PdblWXxQCqPmdihU3dxNMcqwmzI78ifHKYi5se+/AffqImYoqvv8kAA0Nw6eGvcJ0pgwASdMXg84mfxI9+ViVjdo9mEFpNOCZDCFkVpI+dzCyioI/ziNEBeFFK3/csAIgUpRya63yz5QmwdNjgTOLSkLsSNo1zDmGjCXtaw18Yzn4Wiwy7+YY1J8m6zMrkF9eSjfCoulMSu4XFh/eRAoGBANytBJ6H3Kxwvai9uNp/SPf8+2OE3u42r0aWLq30dzdXTSA4OzY+6yB1qWsqqW/ryjuzhGugpezoa7qGzacTt6BvPLY8tJ9TSxi8gBYu69qLX20VMCcbVR7L52AC9WwSci0EYsuW7VNi6ZTKb135CSzbU3tLtnaHDbeL1kn08275AoGBAMtmVs31FGYbnziWkih0CmKSbFCqsQarwwKgr7SEdjuvawVzeCLH0AiezkdHEa1QZA9EnXhPVV4O/YJpBp0OKQ6bHO9tgaxW6Xy1BZ2wL6QGEWcX22oYDaL1XyFPlAs1V4b2ip1wsP0S1SzhSOh36jip9O56bwKc/gZm5G7e5VmHAoGALLFZ4yWO+tmmf7tU6eOnipoQ69noMISgwQH/mDmPv4SN2T2qOFVL13odAthUEpfFkIvOAOI7WJzF3LQaiIEEyphcymfHCRGcfvkGU/fSyqM5g2UsKG9vsNoJFTfkLqwZtaZSv/rkO+QnfHv3TCf4xL3yzWDLJnw5ufe3Qak7eDkCgYB75fYAdUacwDyn6shTTgQ5cTn7lU5KYvxiMGF3U6z1xHArnN/UR+TIK3w53Oe+rBaXWlOVwrWcmwL/mlxF9Sc7V28zxX/U7AhER7yJBpaukmetZdHo+Yfs+QyerOvgO/j6JFnhd5DIR92E/iI8QTdylsy1K+1NKTZvzeNeSfZpJwKBgHI5ilSYR39uSnzinPjqI1ntaJ9C77t+dGOAudS1PlPbz9rsmCaLqGz558F2gOGDfsS6zM7IVh4wYS4T6g/BUoR7c8bkMNtq2IMF9ClevjvVpf9MbsV4S7IBW3OuDmgAL5WzeMhxNZGob+60wE4kWcvBVZRODerBxtOyjQ/dDZcb',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
