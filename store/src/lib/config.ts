import Medusa from "@medusajs/medusa-js"

// Defaults to standard port for Medusa server
let MEDUSA_BACKEND_URL = "postgres://postgres.cyaldmgcviavijxoulwf:vmoBY847F0GW8bf4@aws-0-sa-east-1.pooler.supabase.com:5432/postgres"

if (process.env.NEXT_PUBLIC_MEDUSA_BACKEND_URL) {
  MEDUSA_BACKEND_URL = process.env.NEXT_PUBLIC_MEDUSA_BACKEND_URL
}

export const medusaClient = new Medusa({
  baseUrl: MEDUSA_BACKEND_URL,
  maxRetries: 3,
})
