import { createClient } from '@supabase/supabase-js'

const supabaseUrl = 'https://ydbulmagtgihrxxxqsmx.supabase.co'

const supabaseKey =
  'sb_publishable_vZOuRgZG51J0vWzfdXQkvQ_EifaEX3J'

export const supabase = createClient(
  supabaseUrl,
  supabaseKey
)