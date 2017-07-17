# Platform.sh API Client Symfony Bundle

A Symfony Bundle for the Platform.sh PHP Client (https://github.com/platformsh/platformsh-client-php).

## Configuration

```yaml
platform_client:
    api_token: <platform API Token>
    api_token_type: <API Token type>
```

## Access the Service:

### By Service ID from the container
```php
$this->get('Platformsh\Client\PlatformClient');
```

### Symfony 3.3+ Autowiring
```php
public function __construct(\Platformsh\Client\PlatformClient $platformClient)
{
    $this->platformClient = $platformClient;
}
```