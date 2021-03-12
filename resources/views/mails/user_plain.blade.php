Hola {{ $mail->receiver }},
Tu cuenta en FUNVERCI ha sido creada exitosamente.

Aquí estan tus credenciales:

email: {{ $mail->demo_one }}
password: {{ $mail->demo_two }}

Inicia sesión aquí:
{{url('/login')}}

Gracias,
{{ $mail->sender }}
