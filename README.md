#Platform.sh API Client Symfony Bundle

A Symfony Bundle for the Platform.sh PHP Client (https://github.com/platformsh/platformsh-client-php).

##Configuration

```yaml
platform_client:
    api_token: <platform API Token>
    api_token_type: <API Token type>
```

Access the Service
```php
$this->get('platform.client');
```
