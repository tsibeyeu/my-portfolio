import { createClient } from "contentful";
import { useEffect, useState } from "react";
const client = createClient({
  space: "qidpdpjv7cwy",
  environment: "master",
  accessToken: "BjUA1dG5xdjoWVKho9tvTxG_Mok1nqwCO1o8r1ii57Y",
});
client.getEntries({ content_type: "skills" }).then(response=>console.log(response));

