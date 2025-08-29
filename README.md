## Example of using Capita's Pay360 SOAP API with phpro/soap-client

More specifically (well partially) their Secure Card Portal "Simple" interface.

If using [taskfile](https://taskfile.dev/) and Docker, run `task setup` to build container images and install composer dependencies.

Create a `.env` file from the example and fill in your Capita SCP details.

`task app:scp-version` requests the scpVersion method.
`task app:scp-simple-invoke` requests the scpSimpleInvoke method with a basic payment request. The intension is just to get a valid response.

If not using `taskfile` or Docker and you have a working PHP install `./capita-soap-client app:scp-version` and `./capita-soap-client app:scp-simple-invoke` should do the same.

I'm so tired...
